import styled from 'styled-components';
import theme from '../../../theme/theme';

const HeaderStyled = styled.header`

  div.menu {

    button {
      background-color: white;
      border: 1px solid ${theme.colors.black};
      padding: 2em;
      transition: .5s;

      :hover {
        background-color: ${theme.colors.orange};

        span.squares-menu {
          transform: rotate(90deg);

          div.square {
            border: 5px solid white;
          }
        }
      }

      span.squares-menu {
        display: flex;
        flex-direction: row;
        flex-wrap: wrap;
        justify-content: space-between;
        height: 42px;
        width: 42px;
        transition: .5s;

        div.square {
          height: 10px;
          width: 10px;
          border: 5px solid ${theme.colors.orange};
          border-radius: 7px;
          transition: all .5s;
        }
      }
    }
  }
`;

export default HeaderStyled;